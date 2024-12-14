<div id="wrapper">
  <div class="toolbar">
    <ul>
      <li>
        <a id="goidien" href="tel:<?= $func->parsePhone($optsetting['hotline']) ?>" title="title">
          <?= $func->getImage(['size-error' => '40x40x2', 'upload' => 'assets/images/', 'image' => 'icon-t1.png', 'alt' => 'Phone']) ?><br>
          <span>Gọi điện</span>
        </a>
      </li>
      <li>
        <a id="goidien" href="tel:<?= $func->parsePhone($optsetting['hotline2']) ?>" title="title">
          <?= $func->getImage(['size-error' => '40x40x2', 'upload' => 'assets/images/', 'image' => 'icon-t1.png', 'alt' => 'Phone']) ?><br>
          <span>Gọi điện</span>
        </a>
      </li>
      <li>
        <a id="nhantin" href="sms:<?= $func->parsePhone($optsetting['hotline']) ?>" title="title">
          <?= $func->getImage(['size-error' => '40x40x2', 'upload' => 'assets/images/', 'image' => 'icon-t2.png', 'alt' => 'Message']) ?><br>
          <span>Nhắn tin</span>
        </a>
      </li>
      <li>
        <a id="chatzalo" href="https://zalo.me/<?= $func->parsePhone($optsetting['zalo']) ?>" title="title">
          <?= $func->getImage(['size-error' => '40x40x2', 'upload' => 'assets/images/', 'image' => 'icon-t3.png', 'alt' => 'Zalo']) ?><br>
          <span>Zalo</span>
        </a>
      </li>
      <li>
        <a id="chatfb" href="<?= $optsetting['fanpage'] ?>" title="title">
          <?= $func->getImage(['size-error' => '40x40x2', 'upload' => 'assets/images/', 'image' => 'icon-t4.png', 'alt' => 'Facebook']) ?><br>
          <span>Facebook</span>
        </a>
      </li>
    </ul>
  </div>



</div>