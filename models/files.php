<?php
function getFiles(): array
{
    return array_splice(scandir('docs'), 2);
}