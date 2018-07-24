<?php get_header(); ?>

<div class="container-fluid">
    <div class="container-icons">
        
        <section class="left-icons">
            <?php if (function_exists(clean_custom_menus())) clean_custom_menus(); ?>
        </section>

        <section class="menu">
            <ul id="myTable" class="menu-list">
                <li><i class="fas fa-globe-americas"></i><h5>3Ds Designs</h5></li>
                <li><i class="fas fa-lightbulb"></i><h5>Angular Apps</h5></li>
                <li><i class="fas fa-lightbulb"></i><h5>Animations</h5></li>
                <li><i class="fas fa-lightbulb"></i><h5>Branding</h5></li>
                <li><i class="fas fa-pencil-alt"></i><h5>Illustrations</h5></li>
                <li><i class="fas fa-lightbulb"></i><h5>Javascript Apps</h5></li>
                <li><i class="fas fa-lightbulb"></i><h5>Laravel Apps</h5></li>
                <li><i class="fas fa-lightbulb"></i><h5>Wordpress Themes</h5></li>
                <li><i class="fas fa-globe-americas"></i><h5>Logos</h5></li>
                <li><i class="fas fa-lightbulb"></i><h5>Social Media</h5></li>
                <li><i class="fas fa-lightbulb"></i><h5>Landing Pages</h5></li>
                <li><i class="fas fa-lightbulb"></i><h5>Business Cards</h5></li>
                <li><i class="fas fa-pencil-alt"></i><h5>Photography</h5></li>
                <li><i class="fas fa-lightbulb"></i><h5>PHP Apps</h5></li>
            
            </ul>
            <input class="autocomplete" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for skills.." title="Type in a name">
        </section>
        <section class="right-widgets">
        
        </section>
    </div>
    <section class="bottom-bar">
        <i id="menu-icon" class="fas fa-bars"></i>
        <section class="time-and-date">
            <h5 id="time"></h5>
            <h5 id="date"></h5>
        </section>
    </section>  
</div>




<?php get_footer(); ?>