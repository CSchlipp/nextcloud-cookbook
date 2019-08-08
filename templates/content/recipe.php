<header>
    <?php if(isset($_['image']) && $_['image']) { ?>
        <figure>
            <img src="<?php echo $_['imageURL']; ?>">
        </figure>
    <?php } ?>

    <h2><?php echo $_['name']; ?></h2>
    
    <p><?php echo $_['recipeYield']; ?> serving<?php if($_['recipeYield'] > 1) { echo 's'; } ?></p>
    <p><?php p($l->n('One serving', '%n servings', $_['recipeYield'])); ?></p>
    
    <?php if(isset($_['dailyDozen'])) { ?>
        <?php 

        $daily_dozen = [
            'beansAndLegumes' => [ 'icon' => '🥛', 'name' => $l->t('Beans and legumes') ],
            'berries' => [ 'icon' => '🍓', 'name' => $l->t('Berries') ],
            'cruciferousVegetables' => [ 'icon' => '🥦', 'name' => $l->t('Cruciferous vegetables') ],
            'flaxseeds' => [ 'icon' => '🌱', 'name' => $l->t('Flaxseeds') ],
            'greens' => [ 'icon' => '🥬', 'name' => $l->t('Greens') ],
            'nutsAndSeeds' => [ 'icon' => '🌰', 'name' => $l->t('Nuts and seeds') ],
            'otherFruits' => [ 'icon' => '🍌', 'name' => $l->t('Other fruits') ],
            'otherVegetables' => [ 'icon' => '🥑', 'name' => $l->t('Other vegetables') ],
            'herbsAndSpices' => [ 'icon' => '🌿', 'name' => $l->t('Herbs and spices') ],
            'wholeGrains' => [ 'icon' => '🍞', 'name' => $l->t('Whole grains') ],
        ];
    
        ?>

        <?php foreach($daily_dozen as $id => $ingredient) { ?>
            <?php if(strpos($_['dailyDozen'], $id) === false) { continue; } ?>
            
            <span title="<?php echo $ingredient['name']; ?>"><?php echo $ingredient['icon']; ?></span>
        <?php } ?>
    <?php } ?>
</header>

<aside>
    <ul>
        <h3><?php p($l->t('Ingredients')); ?></h3>

        <?php foreach($_['recipeIngredient'] as $ingredient) {  ?>
            <li><?php echo $ingredient; ?></li>   
        <?php } ?>
    </ul>    
</aside>

<main>
    <ul>
        <h3><?php p($l->t('Instructions')); ?></h3>

        <?php foreach($_['recipeInstructions'] as $step) {  ?>
            <li><?php echo $step; ?></li>   
        <?php } ?>
    </ul>
</main>
