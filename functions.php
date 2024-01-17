<?php
// Генерація посилання для стовпця таблиці
function generateLink($col, $sortBy, $sortOrder)
{
    return "?sort=$col&order=" . ($sortBy === $col ? ($sortOrder === 'asc' ? 'desc' : 'asc') : 'asc');
}
// Застосування сортування до масиву
function applySort(&$arr, &$sortBy, &$sortOrder)
{
    // Перевірка, чи встановлено сортування для конкретного стовпця
    if ($sortBy) {
        // Перевірка, чи не встановлено порядок сортування для поточного стовпця або чи встановлений параметр скидання
        if (!isset($sortOrder[$sortBy]) || (isset($_GET['reset']) && $_GET['reset'] === '1')) {
            // Якщо умова виконується, то встановлюємо сортування для поточного стовпця за замовчуванням (asc)
            $sortOrder = [];
            $sortOrder[$sortBy] = 'asc';
        } else {
            // Якщо умова не виконується, змінюємо порядок сортування для поточного стовпця
            $sortOrder[$sortBy] = ($sortOrder[$sortBy] === 'asc') ? 'desc' : 'asc';
        }
        // Сортування масиву на основі вибраного стовпця та порядку сортування
        usort($arr, function ($a, $b) use ($sortBy, $sortOrder) {
            return ($sortOrder[$sortBy] === 'asc') ? ($a[$sortBy] <=> $b[$sortBy]) : ($b[$sortBy] <=> $a[$sortBy]);
        });
    }
}
// Скидання сортування до значень за замовчуванням
function resetSorting(&$sortBy, &$sortOrder)
{
    $sortBy = 'city';
    $sortOrder = [];
}




