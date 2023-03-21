<?php

class arrays{

    public $dashboard = [
        "item1" => array (
            "icon" => "bx bx-box",
            "name" => "Products"
        ),
        "item2" => array (
            "icon" => "bx bx-list-ul",
            "name" => "Order list"
        ),
        "item3" => array (
            "icon" => "bx bx-pie-chart-alt-2",
            "name" => "Analytics"
        ),
        "item4" =>  array (
            "icon" => "bx bx-coin-stack",
            "name" => "Stock"
        ),
        "item5" => array (
            "icon" => "bx bx-book-alt",
            "name" => "Total order"
        ),
        "item6" => array (
            "icon" => "bx bx-user",
            "name" => "Team"
        ),
        "item7" => array (
            "icon" => "bx bx-message",
            "name" => "Messages"
        ),
        "item8" => array (
            "icon" => "bx bx-heart",
            "name" => "Favrorites"
        ),
        "item9" => array (
            "icon" => "bx bx-cog",
            "name" => "Settings"
        ),
        "item10" => array (
            "icon" => "bx bx-log-out",
            "name" => "Log out"
        )
    ];

    function returnDashboard(){
        return $this->dashboard;
    }
}