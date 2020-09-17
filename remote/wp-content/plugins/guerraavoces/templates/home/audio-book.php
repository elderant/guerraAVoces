<?php
  $chapters = array(
    'introduccion' => array(
      'class'     => 'introduccion',
      'src'       => '/wp-content/uploads/home-audio-intro.jpg',
      'src-label' => __('Introduction background image','guerra'),
      'audio'     => '??',
    ),
    'capitulo1' => array(
      'class'     => 'capitulo-1',
      'src'       => '/wp-content/uploads/home-audio-chapter1.jpg',
      'src-label' => __('First chapter background image','guerra'),
      'audio'     => '??',
    ),
    'capitulo2' => array(
      'class'     => 'capitulo-2',
      'src'       => '/wp-content/uploads/home-audio-chapter2.jpg',
      'src-label' => __('Second chapter background image','guerra'),
      'audio'     => '??',
    ),
    'capitulo3' => array(
      'class'     => 'capitulo-3',
      'src'       => '/wp-content/uploads/home-audio-chapter3.jpg',
      'src-label' => __('Third chapter background image','guerra'),
      'audio'     => '??',
    ),
    'capitulo4' => array(
      'class'     => 'capitulo-4',
      'src'       => '/wp-content/uploads/home-audio-chapter4.jpg',
      'src-label' => __('Fourth chapter background image','guerra'),
      'audio'     => '??',
    ),
    'capitulo5' => array(
      'class'     => 'capitulo-5',
      'src'       => '/wp-content/uploads/home-audio-chapter5.jpg',
      'src-label' => __('Fifth chapter background image','guerra'),
      'audio'     => '??',
    ),
    'capitulo6' => array(
      'class'     => 'capitulo-6',
      'src'       => '/wp-content/uploads/home-audio-chapter6.jpg',
      'src-label' => __('Sixth chapter background image','guerra'),
      'audio'     => '??',
    ),
    'capitulo7' => array(
      'class'     => 'capitulo-7',
      'src'       => '/wp-content/uploads/home-audio-chapter7.jpg',
      'src-label' => __('Seventh chapter background image','guerra'),
      'audio'     => '??',
    ),
    'capitulo8' => array(
      'class'     => 'capitulo-8',
      'src'       => '/wp-content/uploads/home-audio-chapter8.jpg',
      'src-label' => __('Eight chapter background image','guerra'),
      'audio'     => '??',
    ),
    'capitulo9' => array(
      'class'     => 'capitulo-9',
      'src'       => '/wp-content/uploads/home-audio-chapter9.jpg',
      'src-label' => __('Nineth chapter background image','guerra'),
      'audio'     => '??',
    ),
    'capitulo10' => array(
      'class'     => 'capitulo-10',
      'src'       => '/wp-content/uploads/home-audio-chapter10.jpg',
      'src-label' => __('Tenth chapter background image','guerra'),
      'audio'     => '??',
    ),
    'capitulo11' => array(
      'class'     => 'capitulo-11',
      'src'       => '/wp-content/uploads/home-audio-chapter11.jpg',
      'src-label' => __('Eleventh chapter background image','guerra'),
      'audio'     => '??',
    ),
    'final' => array(
      'class'     => 'final',
      'src'       => '/wp-content/uploads/home-audio-close.jpg',
      'src-label' => __('Closing background image','guerra'),
      'audio'     => '??',
    ),
    
    

  );
?>

<section id="audiobook">
	<div class="container-fluid">
    <div class="row first-row text-center">
      <div class="col-12">
        <div class="description animated fadeIn">
          <h2 class="uppercase"><?php _e('Audiolibro', 'guerra');?></h2>
        </div>
      </div>
    </div>
    <div class="row carousel-row">
      <div class="col-10 offset-1">
        <div class="slick-prev arrow top">
          <i class="fas fa-angle-double-up"></i>
        </div>
        <div class="slick-next arrow bottom">
          <i class="fas fa-angle-double-down"></i>
        </div>
        <div class="carousel-container">
          <?php foreach($chapters as $chapter) :?>
            <div class="chapter-container <?php echo $chapter['class']?>">
              <img src="<?php echo $chapter['src']?>" alt="<?php echo $chapter['src-label']?>">
              <!-- <audio controls>
                <source src="<?php echo $chapter['audio']?>" type="audio/ogg">
                <?php _e('Su explorador no soporta el elemento de audio','guerra');?>
              </audio> -->
            </div>
          <?php endforeach;?>
        </div>
      </div>
    </div>
  </div>    
</section>