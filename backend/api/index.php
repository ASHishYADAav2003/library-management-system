<?php
// backend/api/index.php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    echo json_encode([
        "status" => "success",
        "data" => [
            "kpi" => [
                [
                    "id" => "students",
                    "title" => "Total Students",
                    "value" => "120",
                    "trend" => "+8%",
                    "isPositive" => true,
                    "subtitle" => "+24 students vs last week",
                    "color" => "bg-blue-500"
                ],
                [
                    "id" => "seats",
                    "title" => "Occupied Seats",
                    "value" => "46",
                    "trend" => "-5%",
                    "isPositive" => false,
                    "subtitle" => "-3 seats vs last week",
                    "color" => "bg-pink-500"
                ],
                [
                    "id" => "time",
                    "title" => "Total Study Time",
                    "value" => "80h",
                    "trend" => "+2%",
                    "isPositive" => true,
                    "subtitle" => "+2 hours vs last week",
                    "color" => "bg-emerald-500"
                ],
                [
                    "id" => "subscriptions",
                    "title" => "Active Subscriptions",
                    "value" => "315",
                    "trend" => "+12%",
                    "isPositive" => true,
                    "subtitle" => "+30 subs vs last week",
                    "color" => "bg-orange-500"
                ]
            ],
            "chart" => [
                ["month" => "Jan", "value" => 45],
                ["month" => "Feb", "value" => 52],
                ["month" => "Mar", "value" => 38],
                ["month" => "Apr", "value" => 65],
                ["month" => "May", "value" => 72],
                ["month" => "Jun", "value" => 85, "isHighlighted" => true, "tooltip" => "avg. 94 (+5%)"],
                ["month" => "Jul", "value" => 58],
                ["month" => "Aug", "value" => 60],
                ["month" => "Sep", "value" => 48],
                ["month" => "Oct", "value" => 55]
            ],
            "leaderboard" => [
                ["name" => "Agus Jamu", "hours" => "15", "progress" => "92%", "color" => "bg-blue-500"],
                ["name" => "Jarwanto Alex", "hours" => "20", "progress" => "88%", "color" => "bg-pink-500"],
                ["name" => "Siti Rahma", "hours" => "18", "progress" => "76%", "color" => "bg-emerald-500"]
            ],
            "attendance" => [
                "present" => 84,
                "growth" => "+70%",
                "segments" => [
                    ["label" => "On Time", "percentage" => 60, "color" => "bg-blue-500"],
                    ["label" => "Late", "percentage" => 25, "color" => "bg-emerald-500"],
                    ["label" => "Absent", "percentage" => 15, "color" => "bg-orange-400"]
                ]
            ]
        ]
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Method not allowed"
    ]);
}
?>
