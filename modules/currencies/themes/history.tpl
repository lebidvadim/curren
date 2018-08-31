<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Курсы валют</title>
</head>
<body>

<div class="container pt-3">
    <h2>История</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Дата</th>
            <th scope="col">EUR-UAH</th>
            <th scope="col">RUR-UAH</th>
            <th scope="col">USD-UAH</th>
            <th scope="col">BTC-USD</th>
        </tr>
        </thead>
        <tbody>
        {for $i = 0; $i < count($currencies); $i++}
        <tr>
            <th scope="row">{$currencies[$i]['id']}</th>
            {$cur = json_decode($currencies[$i]['cur'])}
            <td>{$currencies[$i]['date']|date_format:"%d.%m.%Y, %H:%M"}</td>
            {for $j = 0; $j < count($cur);$j++}
            <td>
                <div>Купить: <b>{round($cur[$j]->buy, 2)}</b> {if $cur[$j]->base_ccy == 'UAH'}грн.{elseif $cur[$j]->base_ccy == 'USD'}${else}грн.{/if}</div>
                <div>Продать: <b>{round($cur[$j]->sale, 2)}</b> {if $cur[$j]->base_ccy == 'UAH'}грн.{elseif $cur[$j]->base_ccy == 'USD'}${else}грн.{/if}</div>
            </td>
            {/for}
        </tr>
        {/for}

        </tbody>
    </table>
    <a href="/" class="btn btn-primary">Главная</a>
</div>

</body>
</html>