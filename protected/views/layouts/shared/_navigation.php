<!-- navigation -->
<nav id="navigation">
  <div class="shell">
    <ul>
      <? foreach($this->pages as $pg) : ?>
        <li class="<?= H::isActiveMenu($pg->id, $this->page->id); ?>">
          <a href="<?= $this->createUrl("pages/show", ['pageSlug' => $pg->slug]); ?>">
            <span class="bottom-arr"></span>
            <?= $pg->menu_header; ?>
          </a>
        </li>
      <? endforeach; ?>
    </ul>
  </div>	
</nav>
