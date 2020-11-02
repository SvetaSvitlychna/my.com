 <h5 class="text-uppercase mb-4">Categories</h5>
                        
<div class="py-2 px-4 bg-dark text-white mb-3">
    <strong class="small text-uppercase font-weight-bold">Bicycle</strong></div>
<ul class="list-unstyled small text-muted pl-4 font-weight-normal">
    <?php foreach($categories as $category):?>
    <li class="mb-2">
        <a class="reset-anchor category-item" href="#" data-category="bicycle"><?=$category->name;?></a>
    </li>
    <?php endforeach;?>
</ul>
<div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase font-weight-bold">Accessories</strong></div>
<ul class="list-unstyled small text-muted pl-4 font-weight-normal">
    <li class="mb-2"><a class="reset-anchor category-item" href="#" data-category="accessories">Wheel</a></li>
    <li class="mb-2"><a class="reset-anchor category-item" href="#" data-category="accessories">Pedal</a></li>
    <li class="mb-2"><a class="reset-anchor category-item" href="#" data-category="accessories">Security Lock</a></li>
    <li class="mb-2"><a class="reset-anchor category-item" href="#" data-category="accessories">Bell</a></li>
    <li class="mb-2"><a class="reset-anchor category-item" href="#" data-category="accessories">Chairwheel</a></li>
    <li class="mb-2"><a class="reset-anchor category-item" href="#" data-category="accessories">Tyre</a></li>
    <li class="mb-2"><a class="reset-anchor category-item" href="#" data-category="accessories">Oil</a></li>
</ul>
<div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase font-weight-bold">Clothes</strong></div>
<ul class="list-unstyled small text-muted pl-4 font-weight-normal mb-5">
    <li class="mb-2"><a class="reset-anchor category-item" href="#" data-category="clothes">Women's</a></li>
    <li class="mb-2"><a class="reset-anchor category-item" href="#" data-category="clothes">Men's</a></li>
    <li class="mb-2"><a class="reset-anchor category-item" href="#" data-category="clothes">Kids</a></li>
    <li class="mb-2"><a class="reset-anchor category-item" href="#" data-category="clothes">Teenager</a></li>
    <li class="mb-2"><a class="reset-anchor category-item" href="#" data-category="clothes">Unisex</a></li> 
</ul> 

