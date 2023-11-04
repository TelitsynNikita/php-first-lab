<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        tr, td {
            border: 1px solid black;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <label for="main-select">Тип ввода</label>
        <select name="select" id="main-select">
            <option value="1">Строки</option>
            <option value="2">Столбцы</option>
        </select>
        <input type="text" placeholder="Текст..." id="input">
    </div>
    <table>
        <tr class="first-row">
            <td class="first-column">&nbsp;</td>
            <td>Knocky</td>
            <td>Flor</td>
            <td>Ella</td>
            <td>Juan</td>
        </tr>
        <tr>
            <td class="first-column">Breed</td>
            <td>Jack Russell</td>
            <td>Poodle</td>
            <td>Streetdog</td>
            <td>Cocker Spaniel</td>
        </tr>
        <tr>
            <td class="first-column">Age</td>
            <td>16</td>
            <td>9</td>
            <td>10</td>
            <td>5</td>
        </tr>
        <tr>
            <td class="first-column">Owner</td>
            <td>Mother-in-law</td>
            <td>Me</td>
            <td>Me</td>
            <td>Sister-in-law</td>
        </tr>
        <tr>
            <td class="first-column">Eating Habits</td>
            <td>Eats everyone's leftovers</td>
            <td>Nibbles at food</td>
            <td>Hearty eater</td>
            <td>Will eat till he explodes</td>
        </tr>
    </table>
</body>

<script>
    window.addEventListener('DOMContentLoaded', () => {
        const firstColumnItems = document.querySelectorAll('.first-column td'),
        firstRowItems = document.querySelectorAll('.first-row'),
        select = document.querySelector('#main-select'),
        input = document.querySelector('input');
        let enterType = select.value = 1;

        select.addEventListener('change', e => {
            enterType = e.target.value;
            input.value = '';
        })

        input.addEventListener('change', e => {
            if (enterType === 1) {
                firstRowItems.forEach(row => {
                    row.innerText = '';
                    row.innerText = row.innerText + e.target.value;
                })
            } else if (enterType === 2) {
                firstColumnItems.forEach(column => {
                    column.innerText = '';
                    column.innerText = column.innerText + e.target.value;
                })
            }
        })
    })
</script>
</html>