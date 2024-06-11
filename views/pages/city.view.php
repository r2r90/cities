<h1>City: <?php echo e($city->getCityWithCountry()); ?></h1>

<table>
    <tbody>
    <tr>
        <th>City Name</th>
        <td><?php echo e($city->city) ?></td>
    </tr>
    <tr>
        <th>City Name (ascii)</th>
        <td><?php echo e($city->cityAscii) ?></td>
    </tr>
    <tr>
        <th>Country</th>
        <td><?php echo e($city->country) ?></td>
    </tr>
    <tr>
        <th>ISO2 code of country:</th>
        <td><?php echo e($city->iso2) ?></td>
    </tr>
    <tr>
        <th>Population</th>
        <td><?php echo e($city->population) ?></td>
    </tr>
    <tr>
        <th>Flag</th>
        <td><?php echo e($city->getFlag()); ?></td>
    </tr>
    </tbody>
</table>