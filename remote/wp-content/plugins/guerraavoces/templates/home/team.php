<?php
  $team = array(
    'diana_ospina' => array(
      'class'     => 'ospina odd',
      'job'       => __('Escritora','guerra'),
      'src'       => '/wp-content/uploads/home-team-dianaOspina.jpg',
      'src-label' => __('Diana Ospina Photo','guerra'),
      'name'      => __('Diana Ospina','guerra'),
    ),
    'lisa_neisa' => array(
      'class'     => 'lisa_neisa even',
      'job'       => __('Directora','guerra'),
      'src'       => '/wp-content/uploads/home-team-lisaNeisa.jpg',
      'src-label' => __('Lisa Neisa Photo','guerra'),
      'name'      => __('Lisa Neisa','guerra'),
    ),
    'katia_rodriguez' => array(
      'class'     => 'katia_rodríguez odd',
      'job'       => __('Editora','guerra'),
      'src'       => '/wp-content/uploads/home-team-katiaRodriguez.jpg',
      'src-label' => __('Katia Rodríguez Photo','guerra'),
      'name'      => __('Katia Rodríguez','guerra'),
    ),
    'dylan_quintero' => array(
      'class'     => 'dylan_quintero even',
      'job'       => __('Ilustrador','guerra'),
      'src'       => '/wp-content/uploads/home-team-dylanQuintero.jpg',
      'src-label' => __('Dylan Quintero Photo','guerra'),
      'name'      => __('Dylan Quintero','guerra'),
    ),
    'emmanuel_neisa' => array(
      'class'     => 'emmanuel_neisa odd',
      'job'       => __('Director','guerra'),
      'src'       => '/wp-content/uploads/home-team-emmanuelNeisa.jpg',
      'src-label' => __('Emmanuel Neisa Photo','guerra'),
      'name'      => __('Emmanuel Neisa','guerra'),
    ),
    'catalina_buitrago' => array(
      'class'     => 'catalina_buitrago even',
      'job'       => __('Investigadora','guerra'),
      'src'       => '/wp-content/uploads/home-team-catalinaBuitrago.jpg',
      'src-label' => __('Catalina Buitrago Photo','guerra'),
      'name'      => __('Catalina Buitrago','guerra'),
    ),
    'helena_rodriguez' => array(
      'class'     => 'helena_rodriguez odd',
      'job'       => __('Corrección y Revisión','guerra'),
      'src'       => '/wp-content/uploads/home-team-helenaRodriguez.jpg',
      'src-label' => __('Helena Rodríguez Photo','guerra'),
      'name'      => __('Helena Rodríguez','guerra'),
    ),
  );
?>

<section id="team">
	<div class="container-fluid">
    <div class="row first-row text-center">
      <div class="col-12">
        <div class="title animate-in">
          <h2 class="uppercase"><?php _e('El Equipo', 'guerra');?></h2>
        </div>
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
          <?php foreach($team as $member) :?>
            <div class="member-container h5 <?php echo $member['class']?>">
              <p class="job text-center"><?php echo $member['job']?></p>
              <img src="<?php echo $member['src']?>" alt="<?php echo $member['src-label']?>">
              <p class="name text-center h5"><?php echo $member['name']?></p>
            </div>
          <?php endforeach;?>
        </div>
      </div>
    </div>
  </div>    
</section>