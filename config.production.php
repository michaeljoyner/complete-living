<?php

return [
    'baseUrl' => 'http://happy-carson-987bf8.netlify.com',
    'production' => true,
    'collections' => [
        "posts" => [
            "path" => 'blog/posts/{slug}',
            "extends" => "_layouts.post",
            "section" => "content",
            "sort" => "-published_at"
        ],
        "archives" => [
            "path" => "archives/post/{archive_id}",
            "extends" => "_layouts.post",
            "section" => "content"
        ]
    ],
];
