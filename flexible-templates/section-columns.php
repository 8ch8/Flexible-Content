<div class="row">

    <?php 
    
    $columns = get_sub_field( 'columns' );
    
    foreach($columns as $column):?>

            <div class="col-lg-4">
                <h3><?php echo $column['title'];?></h3>

                <p><?php echo $column['content'];?></p>

            <?php if($column['link']):?>
                <a href="<?php echo $column['link']['url'];?>">Find Out More</a>
            <?php endif;?>

            </div>
          
    <?php endforeach;?>

</div>