
<?php
    /**
     * DOCUMENTATION NOTE
     *
     * RULE 01 -    RESPONSIVE
     *              This a PHP extension used by the package on https://github.com/riverskies/laravel-mobile-detect
     *
     * RULE 02 -    COMPONENTS
     *              This version of laravel has component support. All recuring code have been created using a component,
     *              such as Property cards, Project cards, Blog cards, etc.
     *
     * RULE 03 -    OPTIMIZATION
     *              All controller functions that returns DB data to the view files have been limited by attributes to
     *              make redundant attributes.
     *
     *
    */
?>

@notmobile

    @include('home.desktop.index')

@endnotmobile

@mobile

    @include('home.mobile.index')

@endmobile


