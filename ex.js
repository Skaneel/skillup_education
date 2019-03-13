// 1 Вывести последний элемент массива
// var arr1 = ['item1', 'item2', 'item3', 'item4', 'item5'];
// console.log(arr1[arr1.length]);

// 2 Добавить элемент в конец массива
// var goods = ['item1', 'item2', 'item3', 'item4', 'item5'];
// goods[goods.length] = 'Компьютер';
// console.log(goods);

// 3 Создайте массив styles с элементами «Джаз», «Блюз».
// Добавьте в конец значение «Рок-н-Ролл»
// Замените предпоследнее значение с конца на «Классика». Код замены предпоследнего значения должен работать для массивов любой длины.
// Удалите первое значение массива и выведите его alert.
// Добавьте в начало значения «Рэп» и «Регги».
// var styles = ['Джаз', 'Блюз',];
// console.log(styles);
// styles[styles.length] = 'Рок-н-Ролл';
// console.log(styles);
// var secondToLastItem = styles.length - 2;
// styles.splice(secondToLastItem, 1, 'Классика');
// console.log(styles);
// alert(styles.splice(0, 1));
// styles.splice(0, 0, 'Рэп', 'Регги');
// console.log(styles);

// 4 получить случайное значение из массива
// var arr = ["Яблоко", "Апельсин", "Груша", "Лимон"];
// var randomIndex = (Math.floor(Math.random() * arr.length));
// console.log(arr[randomIndex]);

// 5 Калькулятор значений
// var calc = [];
// do {
//     var x = prompt('введите число');
//     calc.push(+x);
// }
// while (isFinite(x) && x != null && x != '');
// console.log(calc);
// var sum = calc.reduce(function (result, num) {
//     return result + num;
// }, 0);
// console.log(sum);

