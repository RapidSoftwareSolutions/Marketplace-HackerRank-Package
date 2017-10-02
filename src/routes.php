<?php
$routes = [
    'metadata',
    'createSubmission',
    'getProgrammingLanguages'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

