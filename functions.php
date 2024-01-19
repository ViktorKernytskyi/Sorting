<?php
function generateLink($col, $sortBy, $order)
{
// Якщо $col рівний 'reset', генеруємо посилання для скидання сортування
    if ($col === 'reset') {
        return "?sort=reset";
    }
// В іншому випадку генеруємо звичайне посилання для сортування
    return "?sort=$col&order=" . ($sortBy === $col ? ($order === 'asc' ? 'desc' : 'asc') : 'asc');
}


// Застосування сортування до масиву
function applySorting(&$array, $sortBy, $order)
{
    // Логіка сортування (адаптуйте згідно зі структурою ваших даних)
    usort($array, function ($a, $b) use ($sortBy, $order) {
        if ($order === 'asc') {
            return $a[$sortBy] <=> $b[$sortBy];
        } elseif ($order === 'desc') {
            return $b[$sortBy] <=> $a[$sortBy];
        }
        return 0;
    });
}

?>

