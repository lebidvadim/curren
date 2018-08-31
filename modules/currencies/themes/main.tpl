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
        <div class="row mb-3">
            {for $i = 0; $i < count($currencies); $i++}
            <div class="col">
                <div class="bg-light border border-info rounded">
                    <div class="text-center">{$currencies[$i]['ccy']}-{$currencies[$i]['base_ccy']}</div>
                    <div class="text-center">Купить: <b>{round($currencies[$i]['buy'], 2)}</b> {if $currencies[$i]['base_ccy'] == 'UAH'}грн.{elseif $currencies[$i]['base_ccy'] == 'USD'}${else}грн.{/if}</div>
                    <div class="text-center">Продать: <b>{round($currencies[$i]['sale'], 2)}</b> {if $currencies[$i]['base_ccy'] == 'UAH'}грн.{elseif $currencies[$i]['base_ccy'] == 'USD'}${else}грн.{/if}</div>
                </div>
            </div>
            {/for}
        </div>
        <a href="/history" class="btn btn-primary">История</a>
    </div>

</body>
</html>