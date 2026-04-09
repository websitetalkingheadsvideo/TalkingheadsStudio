<?php
/**
 * Bootstrap trial header — desktop nav is a plain row (no collapse); mobile uses collapse + toggler.
 */

if (!defined("PATH_PREFIX")) {
	require_once __DIR__ . "/config.php";
}

$th_header2_uri = isset($_SERVER["REQUEST_URI"]) ? (string) $_SERVER["REQUEST_URI"] : "/";
$th_header2_path_raw = parse_url($th_header2_uri, PHP_URL_PATH);
if ($th_header2_path_raw === null || $th_header2_path_raw === "") {
	$th_header2_current = "/";
} else {
	$th_header2_current = rtrim($th_header2_path_raw, "/");
	if ($th_header2_current === "") {
		$th_header2_current = "/";
	}
}

$th_header2_is_active = function (array $item, string $current_path): bool {
	$href = $item["href"];
	$normalized = rtrim($href, "/");
	if ($href === "/" || $normalized === "") {
		return $current_path === "/" || $current_path === "";
	}
	$child_prefix = $normalized . "/";
	return $current_path === $normalized || ($child_prefix !== "/" && strpos($current_path, $child_prefix) === 0);
};

$th_header2_nav = [
	["href" => "/", "label" => "Home"],
	["href" => "/about/", "label" => "About"],
	["href" => "/actors/", "label" => "Actors"],
	["href" => "/our-work/", "label" => "Our Work"],
	["href" => "/marketing/", "label" => "Marketing"],
	["href" => "/specials/", "label" => "Specials"],
	["href" => "/contact/", "label" => "Contact"],
];
?>

<header class="site-header-bs">
	<div class="site-header-bs__bar">
		<a class="site-header-bs__brand" href="/">
			<img width="340" height="133" src="/wp-content/uploads/2025/06/talking-2.png" alt="Talking Heads" srcset="/wp-content/uploads/2025/06/talking-2.png 340w, /wp-content/uploads/2025/06/talking-2-300x117.png 300w" sizes="(max-width: 340px) 100vw, 340px">
		</a>

		<nav class="site-header-bs__desktop" aria-label="Primary">
			<ul class="th-nav-list site-header-bs__nav-list">
				<?php foreach ($th_header2_nav as $th_item) { ?>
					<?php
					$th_active = $th_header2_is_active($th_item, $th_header2_current);
					$th_a_class = "th-nav-link";
					if ($th_active) {
						$th_a_class .= " th-nav-link-active";
					}
					?>
					<li>
						<a class="<?php echo htmlspecialchars($th_a_class, ENT_QUOTES, "UTF-8"); ?>" href="<?php echo htmlspecialchars($th_item["href"], ENT_QUOTES, "UTF-8"); ?>"<?php echo $th_active ? ' aria-current="page"' : ""; ?>><?php echo htmlspecialchars($th_item["label"], ENT_QUOTES, "UTF-8"); ?></a>
					</li>
				<?php } ?>
			</ul>
		</nav>

		<div class="site-header-bs__actions">
			<div class="th-cta-button">
				<a class="th-cta-button-link" href="/contact">
					<span class="th-cta-button-content">
						<span class="th-cta-button-icon" aria-hidden="true">
							<svg xmlns="https://www.w3.org/2000/svg" width="14" height="13" viewbox="0 0 14 13" fill="none">
								<path d="M11.3371 3.69204L2.02916 13L0.5 11.4708L9.80688 2.16288L1.60415 2.16288V0L13.5 0V11.8958H11.3371V3.69204Z" fill="white"></path>
							</svg>
						</span>
						<span class="th-cta-button-text">Book A Demo</span>
					</span>
				</a>
			</div>
			<button class="site-header-bs__toggler" type="button" data-bs-toggle="collapse" data-bs-target="#siteHeaderBsMobile" aria-controls="siteHeaderBsMobile" aria-expanded="false" aria-label="Toggle navigation">
				<span class="site-header-bs__toggler-icon site-header-bs__toggler-icon--open" aria-hidden="true"></span>
				<span class="site-header-bs__toggler-icon site-header-bs__toggler-icon--close" aria-hidden="true"></span>
			</button>
		</div>

		<div class="site-header-bs__mobile-wrap collapse" id="siteHeaderBsMobile">
			<ul class="site-header-bs__list site-header-bs__list--drawer">
				<?php foreach ($th_header2_nav as $th_item) { ?>
					<?php
					$th_active = $th_header2_is_active($th_item, $th_header2_current);
					$th_a_class = "site-header-bs__link site-header-bs__link--drawer";
					if ($th_active) {
						$th_a_class .= " site-header-bs__link--active";
					}
					?>
					<li>
						<a class="<?php echo htmlspecialchars($th_a_class, ENT_QUOTES, "UTF-8"); ?>" href="<?php echo htmlspecialchars($th_item["href"], ENT_QUOTES, "UTF-8"); ?>" tabindex="-1"<?php echo $th_active ? ' aria-current="page"' : ""; ?>><?php echo htmlspecialchars($th_item["label"], ENT_QUOTES, "UTF-8"); ?></a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</header>
