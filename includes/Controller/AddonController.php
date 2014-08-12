<?php
require_once('AbstractController.php');
/**
 * This controller contains the basic browser logic as well as some of the template rendering.
 * 
 * @todo put the template rendering in templates
 * @todo put the DB stuff in to a AddonDatabase
 */
class AddonController extends AbstractController {

	public function indexAction() {
		$totalcount = $this->db->get_var('SELECT count(*) FROM addon');
		return
			'<form action="search/" id="searchform">
			<div>
				<input type="text" id="t" name="keyword" placeholder="Search" value=""/>
				<input type="submit" value="Search" id="searchsubmit"/>
			</div>
		</form>
		<h2>Search Options</h2>'
			. '<p>The only site to bring you a full addon search engine with links to support threads and preview videos.<br />It\'s been our aim to try and to bring all the various communities together and make the whole XBMC experience much simpler for everyone. With the new totalxbmc system you\'re able to search for addons for EVERY platform (including Xbox) and EVERY XBMC forum will be linked to without prejudice. If you like what we\'re doing please follow us on twitter @totalxbmc</p>'
			. $this->renderCategoryList($this->configuration['categories']) 			
			. '<div class="resultCount">' . $totalcount . ' Add-ons found</div>';
	}

	public function categoryAction() {
		$arguments = $this->arguments;
		$category = getCategoryFromArguments($arguments);
	
		// only continue if we have a valid category
		if ($category) {
			// prepare labels and page rootline
			$categoryLabels = array();
			foreach ($category['rootline'] as $categoryData) {
				$categoryLabels[] = $categoryData['label'];
				$this->pageRenderer->addRootlineItem(array( 'url' => createLinkUrl('category', array_keys($categoryData['rootline'])), 'name' => $categoryData['label']));
			}
			$output .= '<form action="search/" id="searchform">
			<div>
				<input type="text" id="t" name="keyword" placeholder="Search" value=""/>
				<input type="submit" value="Search" id="searchsubmit"/>
			</div>
			</form>
			<h2>Help build the XBMC community</h2>If you know of any new addons or repositories not already listed or you find an addon that\'s listed but you know for a fact it\'s now depreciated please let us know so we can update the database. The Xbox compatibility list is currently being created but it\'s a slow process, if you can help with any testing please get in contact. Thanks!<br /><br /><br />';

			// render subcategories if available
			if (isset($category['subCategories'])) {
				$output .= $this->renderCategoryList($category['subCategories']);
			// show addons if no subcategories
			} else {
				$whereClause = '1=1';
				if (isset($category['extensionPoint'])) {
					$whereClause .= ' AND extension_point = "' . $this->db->escape($category['extensionPoint']) . '"';
				}
				if (isset($category['xboxCompatible'])) {
					$whereClause .= ' AND xbox_compatible = "' . $this->db->escape($category['xboxCompatible']) . '"';
				}
				if (isset($category['contentType'])) {
					$whereClause .= ' AND FIND_IN_SET("' . $category['contentType'] . '", content_types)';
				}
				if (isset($category['genreType'])) {
					$whereClause .= ' AND FIND_IN_SET("' . $category['genreType'] . '", genres)';
				}
				if (isset($category['platformType'])) {
					$whereClause .= ' AND FIND_IN_SET("' . $category['platformType'] . '", platform)';
				}				
				if (isset($category['depreciated'])) {
					$whereClause .= ' AND my_delete = "' . $this->db->escape($category['depreciated']) . '"';
				}
				if (isset($category['broken_addons'])) {
					$whereClause .= ' AND broken !="" OR my_broken !=""';
				}
				if (isset($category['not_adult'])) {
					$whereClause .= ' AND visible = "' . $this->db->escape($category['not_adult']) . '"';
				}
				if (isset($category['xbox_untested'])) {
					$whereClause .= ' AND untested = "' . $this->db->escape($category['xbox_untested']) . '"';
				}

				// execute queries
				$limit = 40;
				$offset = max(0, isset($_GET['page']) ? (intval($_GET['page']) -1) : 0) * $limit;
				if ( isset($category['genreType']) && $category['genreType'] ) {
					$addons = $this->db->get_results('SELECT * FROM addon WHERE ' . $whereClause . $this->configuration['addonExcludeClause'] . ' ORDER BY name ASC LIMIT ' . $offset . ', ' . $limit);
					$count = $this->db->get_var('SELECT count(*) FROM addon WHERE ' . $whereClause . $this->configuration['addonExcludeClause']);
				}
				else {
					$addons = $this->db->get_results('SELECT * FROM addon WHERE ' . $whereClause . $this->configuration['addonExcludeClause'] . ' ORDER BY name ASC LIMIT ' . $offset . ', ' . $limit);
					$count = $this->db->get_var('SELECT count(*) FROM addon WHERE ' . $whereClause . $this->configuration['addonExcludeClause']);
				}

				if ($addons && is_array($addons) && count($addons)) {
					$output .= $this->renderAddonList($addons, createLinkUrl('category', array_keys($category['rootline'])), $count, $limit);
				} else {
					$output .= renderFlashMessage('No addons found', 'There are currently no addons available in this section');
				}
			}
		} else {
			$this->pageNotFound();
			$this->forward('index');
		}
		return $output;
	}

	public function authorAction() {
		$output = '<h2>Browsing</h2>';

		if (count($this->arguments)) {
			// prepare author name and page breadcrumb
			$author = revertAuthorNameCleanup($this->arguments[0]);
			$cleanAuthor = cleanupAuthorName($author);
			$this->pageRenderer->addRootlineItem(array( 'url' => createLinkUrl('author', $cleanAuthor), 'name' => $cleanAuthor));
			$output .= '<p>By author <strong>' . htmlspecialchars($cleanAuthor) . '</strong></p>';

			// execute queries
			$limit = 40;
			$offset = max(0, isset($_GET['page']) ? (intval($_GET['page']) -1) : 0) * $limit;
			$addons = $this->db->get_results('SELECT * FROM addon WHERE FIND_IN_SET("' . $this->db->escape($author) . '", provider_name) ' . $this->configuration['addonExcludeClause'] . ' ORDER BY name ASC LIMIT ' . $offset . ', ' . $limit);
			$count = $this->db->get_var('SELECT count(*) FROM addon WHERE FIND_IN_SET("' . $this->db->escape($author) . '", provider_name) ' . $this->configuration['addonExcludeClause']);

			if ($addons && is_array($addons) && count($addons)) {
				$output .= $this->renderAddonList($addons, createLinkUrl('author', $cleanAuthor), $count, $limit);
			} else {
				$this->pageNotFound();
				$output .= renderFlashMessage('No addons found', 'There are currently no addons available in this section');
			}
		} else {
			$this->pageNotFound();
			$this->forward('index');
		}
		return $output;
	}

	public function searchAction() {
		$output = '';
		if ($_GET['keyword']) {
			// perform search query
			$limit = 40;
			$offset = max(0, isset($_GET['page']) ? (intval($_GET['page']) -1) : 0) * $limit;
			$keyword = $this->db->escape($_GET['keyword']);
			$whereClause = 'id LIKE "' . $keyword . '" OR name LIKE "%' . $keyword . '%" OR description LIKE "%' . $keyword . '" OR provider_name LIKE "%' . $keyword . '%"' . $this->configuration['addonExcludeClause'];
			$addons = $this->db->get_results('SELECT * FROM addon WHERE ' . $whereClause . ' ORDER BY name ASC LIMIT ' . $offset . ', ' . $limit);
			$count = $this->db->get_var('SELECT count(*) FROM addon WHERE ' . $whereClause);

			// render result
			$output .= '<h2>Search</h2><p>Search results for <strong>' . htmlspecialchars($_GET['keyword']) . '</strong></p>';
			if ($addons && is_array($addons) && count($addons)) {
				$output .= $this->renderAddonList($addons, createLinkUrl('search', $_GET['keyword']), $count, $limit);
			} else {
				$output .= renderFlashMessage('No addons found', 'There where no addons found for this keyword.');
			}
		} else {
			$output .= renderFlashMessage('How to search', 'Please enter the keyword you\'re looking for in the search field on the top right corner of the website.', 'info');
		}
		return $output;
	}

	public function showAction() {
		if (count($this->arguments)) {
			$result = $this->db->get_results('SELECT * FROM addon WHERE id = "' . $this->db->escape($this->arguments[0]) . '" LIMIT 1');
		}

		$output = '';
		if ($result) {
			// prepare variables and rootline
			$addon = current($result);
			$this->pageRenderer->addRootlineItem(array( 'url' => createLinkUrl('addon', $addon->id), 'name' => 'Details'));

			// prepare authors and create individual links if more are listed by the addon
			$authors = explode(',', $addon->provider_name);
			$authorLinks = array();
			foreach ($authors as $author) {
				if ($author) {
					$author = cleanupAuthorName($author);
					$authorLinks[] = '<a href="' . createLinkUrl('author', $author) . '">' . htmlspecialchars($author) . '</a>';
				}
			}

			// create details view
			$output .= '<div id="addonDetail">
				<span class="thumbnail"><img src="' . getAddonThumbnail($addon->id, 'large') . '" alt="' . $addon->name . '" class="pic" /></span>
				<h2>' . htmlspecialchars($addon->name) .'</h2>
				<strong>Author:</strong> ' . implode(', ', $authorLinks);

			// Show the extra details of the Add-on
			$output .= '<br /><strong>Version:</strong> ' . $addon->version;
			$output .= '<br /><strong>Released:</strong> ' . $addon->updated;

			// Show repository details
			$repoConfig = getRepositoryConfiguration($addon->repository_id);
			if ($repoConfig) {
				if (count($this->configuration['repositories']) > 1) {
					$output .= '<br /><strong>Repository:</strong> ';
					$output .= $repoConfig['downloadUrl'] ? ('<a href="' . $repoConfig['downloadUrl'] . '" rel="nofollow">' . $repoConfig['name'] . '</a>') : $repoConfig['name'];
				}

				if ($repoConfig['statsUrl'] && $addon->downloads > 0) {
					$output .= '<br /><strong>Downloads:</strong> ' . number_format($addon->downloads);
				}
			}
// I can't seem to get the following code working. It should list the genres and create links to that each genre.			
/*			$genres = $addon->genres;
			if ($genres) {
				$genres = explode(',', $genres );
				$genreLinks = array();
				foreach ($genres as $genre) {
					if ($genre) {
						$category_args = array();
						$category_args[] = 'video'; //$addon->content_types;
						$category_args[] = $genres;
						$category = getCategoryFromArguments($category_args);						
						$genreLinks[] = '<a href="' . createLinkUrl('category', $category_args) . '">' . $category['label'] . '</a>';
					}
				}
				$output .= '<br /><strong>Genres:</strong> ' . implode(', ', $genreLinks);
			}*/

			if ($addon->content_types) {
				$output .= '<br /><strong>Add-on Type:</strong> ' . str_replace('[CR]', '<br />', $addon->content_types);
			}
			if ($addon->genres) {
				$output .= '<br /><strong>Genres:</strong> ' . str_replace('[CR]', '<br />', $addon->genres);
			}
			if ($addon->license) {
				$output .= '<br /><strong>License:</strong> ' . str_replace('[CR]', '<br />', $addon->license);
			}
			if ($addon->platform) {
				$output .= '<br /><strong>Platforms:</strong> ' . str_replace('[CR]', '<br />', $addon->platform);
			}
	/*		if ($addon->xbox_compatible) {
				$output .= '<br /><h2>XBMC4Xbox COMPATIBLE</h2> ';
			}*/
			if ($addon->notes) {
				$output .= '<br /><strong>Notes:</strong> ' . str_replace('[CR]', '<br />', $addon->notes);
			}	
			
			if ($addon->OverrideDesc) {
			$output .= '<br /><br /><br /><br /><br /><br /><br /><br /><div class="description"><h2>Description:</h2><h4>' . str_replace('[CR]', '<br />', $addon->mydescription) . '</h4></div>';
			} else {
			$output .= '<br /><br /><br /><br /><br /><br /><br /><br /><div class="description"><h2>Description:</h2><h4>' . str_replace('[CR]', '<br />', $addon->description) . '</h4></div>';
			}
			if ($addon->broken) {
				$output .= renderFlashMessage('This addon is reported as broken!', '<strong>Details:</strong> ' . htmlspecialchars($addon->broken) . '.', 'error');
			}
			if ($addon->my_broken) {
				$output .= renderFlashMessage('This addon is reported as broken!', '<strong>Details:</strong> ' . htmlspecialchars($addon->my_broken) . '.', 'error');
			}


			$output .=  '<ul class="addonLinks">';
			$output .=  '<br /><h2>Resources:</h2>';
			// Check forum link exists
			$forumLink = $addon->forum ? '<a href="' . $addon->forum .'" target="_blank"><img src="images/forum.png" alt="Forum discussion" /></a>' : '<img src="images/forumbw.png" alt="Forum discussion" />';
			$output .=  '<li><strong>Forum Discussion:</strong><br />' . $forumLink . '</li>';

			// Auto Generate Wiki Link
			$output .=  '<li><strong>Wiki Docs:</strong><br /><a href="http://wiki.xbmc.org/index.php?title=Add-on:' . $addon->name . '" target="_blank"><img src="images/wiki.png" alt="Wiki page of this addon" /></a></li>';

			// Check sourcecode link exists
			$sourceLink = $addon->source ? '<a href="' . $addon->source .'" target="_blank"><img src="images/code.png" alt="Source code" /></a>' : '<img src="images/codebw.png" alt="Source code" />';
			$output .=  "<li><strong>Source Code:</strong><br />" . $sourceLink . '</li>';

			// Check website link exists
			$websiteLink = $addon->website ? '<a href="' . $addon->website .'" target="_blank"><img src="images/website.png" alt="Website" /></a>' : '<img src="images/websitebw.png" alt="Website" />';
			$output .=  "<li><strong>Website:</strong><br />" . $websiteLink . '</li>';

			// Show the Download link
			$downloadLink = getAddonDownloadLink($addon);
			if ($downloadLink) {
				$output .= '<li><strong>Direct Download:</strong><br />';
				$output .= '<a href="' . $downloadLink . '" rel="nofollow"><img src="images/download_link.png" alt="Download" /></a></li>';
			}
			
			// Check if any video links exist
            if ($addon->myvideopreview OR $addon->video_preview OR $addon->myvideoguide OR $addon->video_guide) {
				$output .=  '<br /><br /><br /><h2>Video Guides:</h2>';
			}
			
			// Check video preview link exists
            if ($addon->myvideopreview) {
			$videopreviewLink = '<a href="' . $addon->myvideopreview .'"target="_blank"><img src="images/addons_preview.png" alt="Preview video" /></a>';
			$output .=  '<li>' . $videopreviewLink . '</li>';
            } else {
                if ($addon->video_preview) {
					$videopreviewLink = $addon->video_preview ? '<a href="' . $addon->video_preview .'" target="_blank"><img src="images/addons_preview.png" alt="Preview video" /></a>' : '<img src="images/addons_preview.png" alt="Preview video" />';
					$output .=  '<li>' . $videopreviewLink . '</li>';
				}
            }

			// Check video guide link exists
            if ($addon->myvideoguide) {
			$videoguideLink = '<a href="' . $addon->myvideoguide .'"target="_blank"><img src="images/addons_tutorial.png" alt="Tutorial video" /></a>';
			$output .=  '<li>' . $videoguideLink . '</li>';
            } else {
                if ($addon->video_guide) {
					$videoguideLink = $addon->video_guide ? '<a href="' . $addon->video_guide .'" target="_blank"><img src="images/addons_tutorial.png" alt="Tutorial video" /></a>' : '<img src="images/addons_tutorial.png" alt="Tutorial video" />';
					$output .=  '<li>' . $videoguideLink . '</li>';
				}
            }

			$output .= '</ul></div>';
		} else {
			$this->pageNotFound();
		}
		return $output;
	}
}
?>