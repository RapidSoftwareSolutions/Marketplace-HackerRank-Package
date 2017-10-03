<?php
$routes = [
    'metadata',
    'createSubmission',
    'getProgrammingLanguages',
    'webhookEvent'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

