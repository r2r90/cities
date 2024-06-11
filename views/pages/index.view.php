<h1>List of cities</h1>

<ul>
    <?php foreach ($entries as $city): ?>
        <li>
            <a href="city.php?<?php echo http_build_query(['id' => $city->id]); ?>">

                <?php echo e($city->getCityWithCountry()); ?>
            </a>
        </li>
    <?php endforeach; ?>

</ul>
<?php if ($pagination['page'] > 1): ?>
    <a class="button" href="index.php?<?php echo http_build_query(['page' => $pagination['page'] - 1]) ?>">Prev</a>
<?php endif; ?>
<?php if ($pagination['perPage'] * $pagination['page'] < $pagination['count']): ?>
    <a class="button" href="index.php?<?php echo http_build_query(['page' => $pagination['page'] + 1]) ?>">Next</a>
<?php endif; ?>
