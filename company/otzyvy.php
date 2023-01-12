<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("test", "Тестовое значение");
$APPLICATION->SetPageProperty("title", "Отзывы");
$APPLICATION->SetPageProperty("keywords", "отзывы, компания, мебель");
$APPLICATION->SetPageProperty("description", "Отзывы о компании");
$APPLICATION->SetTitle("Отзывы");
$APPLICATION->SetPageProperty("test2", "test234");
?>

<?php $APPLICATION->ShowProperty("test2"); ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>