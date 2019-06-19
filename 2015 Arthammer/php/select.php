
                            <?php 
                                $baseUrl = '/gallery/?';

                                if ($category) {
                                    $baseUrl .= 'category='.$category.'&';
                                } ?>

<select name="category_selector2" class="selector_gallery">
         <?php
if ($filter) { ?>

                    <option value="<?=$baseUrl?>">All</option>
                            <?php } ?>
     <?php
                            foreach ($tags as $term) {
                              ?>
    
    <option value="<?=$baseUrl?>filter=<?=$term->slug?>"<?= $filter == $term->slug ? ' selected' : '' ?>>
        <?=$term->name?>
    </option>
    
        <?php } ?>
</select>


