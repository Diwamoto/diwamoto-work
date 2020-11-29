<?php
//トップページlayout
$blogs = $this->BcBaser->getBlogPosts('blog', 5);
$works = $this->BcBaser->getBlogPosts('works', 3);
$index = 1;
?>
  <div id="index-banner" class="top fade-under">
        <div class="container center-align">
          <h1 class="message teal-text text-lighten-2">Diwamoto-work</h1>
          <h6 class="header col s12 light">作業記録とか書きたいものを書く場所</h6>
        </div>
  </div>

  <div class="blog fullscreen">
    <div class="container" id="blog-title">
      <div class="section">
        <div class="row">
          <div class="col s12 center">
            <h3>Blog</h3>
            <h5 class="header col s12 light">プログラムの基礎から自作キーボード沼まで</h5>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container" id="blog-body">
      <ul class="collection">
        <?php foreach($blogs as $post):?>
        <li class="collection-item fade-under">
          <?= $this->Blog->category($post,['class' => 'btn-small']);?>
          <a href="<?= $this->Blog->getPostLinkUrl($post); ?>"><span class="title"><?=$post['BlogPost']['name']?></span></a>
          <span class="right"><?=$post['BlogPost']['posts_date']?></span>
        </li>
        <?php endforeach;?>
      </ul>
    </div>
    <div class="container center-align">
      <a class="btn-large waves-effect waves-light black" href="/blog/">Read More
        <i class="material-icons right">send</i>
      </a>
    </div>
  </div>

  <div class="works">
    <div id="works-title fade-under">
      <div class="section">
        <div class="row">
          <div class="col s12 center">
            <h3>Works</h3>
            <h5 class="header col s12 light">大体OSSなので使って見てください。</h5>
          </div>
        </div>
      </div>
    </div>
    <?php foreach($works as $work):?>
    <div class="container fade-left">
      <div class="row">
        <?php if($index % 2 === 1): //奇数であれば左に説明、右に画像?>
            <div class="col l6 s12">
              <div class="card teal lighten-2">
                <div class="card-content white-text">
                  <span class="card-title"><?=$work['BlogPost']['name']?></span>
                  <p><?=$this->PetitCustomField->getPdcfData($work, 'discription')?></p>
                </div>
                <div class="card-action">
                  <a class="white-text" href="#"><?=$this->PetitCustomField->getPdcfData($work, 'site_url')?></a>
                  <a class="white-text" href="#"><?=$this->PetitCustomField->getPdcfData($work, 'github')?></a>
                </div>
              </div>
            </div>
            
            <div class="col l6 s12" style="max-height: 50px;">
              <?=$this->BcBaser->img('http://res.cloudinary.com/duciuqg0b/image/upload/v1590071171/IMG_5905_ptqnik.png',['class' => 'materialboxed col l12', 'alt' => 'Unsplashed background img 2']);?>
            </div>
        <?php else:?>
          <div class="col l6 s12 works-image">
            <?=$this->BcBaser->img('http://placehold.jp/1440x743.png?text=no-image',['class' => 'materialboxed col l12', 'alt' => 'Unsplashed background img 2']);?>
          </div>
          
          <div class="col l6 s12">
            <div class="card teal lighten-2">
              <div class="card-content white-text">
                <span class="card-title">こんなの作りました</span>
                <p>こんなことを頑張りました。これをつくることによりこんなことができるようになりました。</p>
              </div>
              <div class="card-action">
                <a class="white-text" href="#">サイトにアクセスする</a>
                <a class="white-text" href="#">github</a>
              </div>
            </div>
          </div>
        <?php endif;?>
      </div>
    </div>
    <?php endforeach;?>
    
    
    <div class="container fade-right">
      <div class="row">
        
        
        
      </div>
    </div>
    
    <div class="container center-align s12">
      <a class="btn-large waves-effect waves-light black" href="/blog/">Read More
        <i class="material-icons right">send</i>
      </a>
    </div>
    
  </div>