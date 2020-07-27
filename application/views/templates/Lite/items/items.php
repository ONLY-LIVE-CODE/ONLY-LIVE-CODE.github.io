<? if(count($items)): foreach($items as $item): ?>	
<div class="item-loop"><a href="<?php echo base_url("product/".$item->id); ?>">
        </a><div class="poster"><a href="<?php echo base_url("product/".$item->id); ?>">
            <img style="border-left: 3px solid #e9eff2;height: 60px;width: 130px;margin-left: -2px;" src="<? echo $item->iconurl; ?>" alt="<? echo $item->name; ?>">
            </a><a href="<?php echo base_url("product/".$item->id); ?>"><span>Купить</span></a>
        </div>
        <div class="title">
            <a href="<?php echo base_url("product/".$item->id); ?>"><? echo $item->name; ?></a>
            <span class="cat">В наличии</span>
        </div>
            <div class="coast"><? echo round($item->price_final*100)/100;?> <i>руб.</i>

</div>
</div>

<? endforeach; ?>
<? else: ?>
<div class="">
Товаров пока нет...Приходите позже!
</div>
<? endif; ?>