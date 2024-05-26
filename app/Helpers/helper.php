<?php

use Carbon\Carbon;

if (!function_exists('formatTanggal')) {
    function formatTanggal($tanggal = null, $format = 'l, j F Y')
    {
        $parsedDate = Carbon::parse($tanggal)->locale('id')->settings(['formatFunction' => 'translatedFormat']);
        return $parsedDate->format($format);
    }
}

if (!function_exists('formatRupiah')) {
    function formatRupiah($amount)
    {
        return 'Rp ' . number_format($amount, 0, ',', '.');
    }
}

if (!function_exists('convertToEmbedUrl')) {
    function convertToEmbedUrl($url)
    {
        if (preg_match('/youtu.be\/([^\?]*)/', $url, $match) || preg_match('/youtube.com\/watch\?v=([^\&\?\/]+)/', $url, $match)) {
            return 'https://www.youtube.com/embed/' . $match[1];
        }
        return $url;
    }
}