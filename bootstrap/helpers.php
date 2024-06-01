<?php

if (!function_exists('setActiveClass')) {
    function setActiveClass($route): string
    {
        return url()->current() === $route ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
    }
}
