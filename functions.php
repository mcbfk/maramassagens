<?php
//regitrar a sidebar
register_sidebar(
    array(
        "name" => "Barra lateral1",
        "id" => "sidebar1",
        "before_widget" => "<div class='widget1'>",
        "after_widget" => "</div>",
        "before_title" => "<h2 class='widget-title'>",
        "after_title" => "</h2>",
    )
);