<!-- navigation -->
<nav id="navigation">
  <div class="shell">
    <ul>
      <? foreach($this->pages as $pg) : ?>
        <li>
          <a href="<?= $this->createUrl("pages/show", ['pageId' => $pg->id]); ?>">
            <span class="bottom-arr"></span>
            <?= $pg->menu_header; ?>
          </a>
        </li>
      <? endforeach; ?>
    </ul>
  </div>	
</nav>
<!-- end of navigation -->

<!-- // <nav id="navigation"> -->
<!-- //   <div class="shell"> -->
<!-- //     <ul> -->
<!-- //       <li class="active"><a href="#"><span></span>HOME</a></li> -->
<!-- //       <li><a href="#"><span class="bottom-arr"></span>ABOUT</a></li> -->
<!-- //       <li><a href="#"><span class="bottom-arr"></span>SERVICES</a></li> -->
<!-- //       <li><a href="#"><span class="bottom-arr"></span>PORTFOLIO</a></li> -->
<!-- //       <li><a href="#"><span class="bottom-arr"></span>BLOG</a></li> -->
<!-- //       <li><a href="#"><span class="bottom-arr"></span>CONTACT US</a></li> -->
<!-- //     </ul> -->
<!-- //   </div>	 -->
<!-- // </nav> -->
