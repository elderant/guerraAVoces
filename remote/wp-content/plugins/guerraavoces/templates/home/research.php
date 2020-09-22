<?php
  $images = array(
    'image1' => array(
      'class'     => 'image-1',
      'src'       => '/wp-content/uploads/home-research-image1.jpg',
      'src-label' => __('First resarch additional image','guerra'),
    ),
    'image2' => array(
      'class'     => 'image-2',
      'src'       => '/wp-content/uploads/home-research-image2.jpg',
      'src-label' => __('Second resarch additional image','guerra'),
    ),
    'image3' => array(
      'class'     => 'image-3',
      'src'       => '/wp-content/uploads/home-research-image3.jpg',
      'src-label' => __('Thrid resarch additional image','guerra'),
    ),
    'image4' => array(
      'class'     => 'image-4',
      'src'       => '/wp-content/uploads/home-research-image4.jpg',
      'src-label' => __('Fourth resarch additional image','guerra'),
    ),
    'image5' => array(
      'class'     => 'image-5',
      'src'       => '/wp-content/uploads/home-research-image5.jpg',
      'src-label' => __('Fifth resarch additional image','guerra'),
    ),
  );
?>

<section id="research">
	<div class="container-fluid">
    <div class="row first-row text-center">
      <div class="col-12">
        <div class="title animate-in">
          <h2 class="uppercase"><?php _e('La investigación', 'guerra');?></h2>
        </div>
      </div>
    </div>
    <div class="row research-intro-row text-center h4">
      <div class="col-12 offset-0 col-sm-10 offset-sm-1">
        <p>
          <?php _e('La recopilación de archivos, entrevistas y testimonios de cada uno de los actores del conflicto fue la base para el libro. Sin embargo, esta investigación nos cambió a todos. En cada conversación nos sumergimos en los años de la guerra, las circunstancias de cada persona, sus miedos, dilemas y decisiones.','guerra');?>
        </p>
      </div>
    </div>
    <div class="row research-image-row">
      <div class="col-12 offset-0 col-sm-10 offset-sm-1">
        <img class="animate-in" src="/wp-content/uploads/home-research-main.jpg" alt="<?php _e('Resarch main image','guerra');?>">
      </div>
    </div>
    <div class="row research-description-row text-center h4">
      <div class="col-12 offset-0 col-sm-10 offset-sm-1">
        <p>
          <?php _e('El libro presenta los testimonios de militares, guerrilleros, paramilitares, campesinos, líderes, niños y jóvenes de Colombia al inicio de los años 2000 y busca resaltar las voces de aquellos que escucharon, sintieron y presenciaron la guerra. En cada sonido, voz y relato, nos vemos reflejados en las historias de quienes las narran y, por eso, el libro va más allá de un ejercicio de lectura y se convierte en un ejercicio de escucha y apropiación.','guerra');?>
        </p>
      </div>
    </div>

    <div class="row carousel-row">
      <div class="col-12">
        <div class="slick-prev arrow left">
          <i class="fas fa-angle-double-left"></i>
        </div>
        <div class="slick-next arrow right">
          <i class="fas fa-angle-double-right"></i>
        </div>
        <div class="carousel-container">
          <?php foreach($images as $image) :?>
            <div class="image-container <?php echo $image['class']?>">
              <img src="<?php echo $image['src']?>" alt="<?php echo $image['src-label']?>">
            </div>
          <?php endforeach;?>
        </div>
      </div>
    </div>

  </div>    
</section>