<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 05-10-2016
 * Time: 10:42 AM
 */

echo date("Y-m-d H:i:s"); ?>
<div id="users">
    <input class="search" placeholder="Search"/>
    <button class="sort" data-sort="name">
        Sort by name
    </button>

    <ul class="list collection">
        <li class="collection-item">
            <h3 class="name">Jonny Stromberg</h3>
            <p class="born">1986</p>
        </li>
        <li>
            <h3 class="name">Jonas Arnklint</h3>
            <p class="born">1985</p>
        </li>
        <li>
            <h3 class="name">Martina Elm</h3>
            <p class="born">1986</p>
        </li>
        <li>
            <h3 class="name">Gustaf Lindqvist</h3>
            <p class="born">1983</p>
        </li>
    </ul>

</div>
<script src="../js/listjs.min.js"></script>
<script>
    var options = {
        valueNames: ['name', 'born']
    };

    var userList = new List('users', options);
</script>


