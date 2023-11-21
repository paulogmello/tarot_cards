<?php
$cards = [
    ["The Fool", "Blissful carelessness, the power of ignorance.", "Innocence — carefree ignorance."],
    ["The Magician", "A sudden solution, as if by magic - but it may be just an illusion", "Wizard — surpassing the plausible"],
    ["The High Priestress", "Secrets and hidden circumstances stand in the way and need to be understood", "Secret — hidden influence"],
    ["The Empress", "The gentle power that still rules, almost unnoticed and rarely opposed", "Benefactor — gentle power"],
    ["The Emperor", "You're up against real power, so yield or suffer the consequences", "Supreme ruler — irresistible power"],
    ["The Hierophant", "The dependency on approval from an elevated dignity", "Priest — spiritual authority"],
    ["The Lovers", "Deeply felt mutual attraction - for as long as it lasts", "Love — intense affection"],
    ["The Chariot", "Triumph - but beware of its consequences at length.", "Conqueror — success in spite of resistance"],
    ["Strength", "Strength of a kind that's superior because of its clever application", "Hero — a great feat"],
    ["The Hermit", "The lesson and reward, but also misfortune, of solitude.", "Solitude — isolation"],
    ["The Wheel of Fortune", "An uncertain outcome, with an aftermath to be carefully considered", "Chance — the unpredictable"],
    ["Justice", "Justice without blindfold is not always fair.", "Judge — the rule of law."],
    ["The Hanged Man", "Great personal sacrifice that still doesn't hurt much", "Martyr — sacrifice"],
    ["Death", "A costly loss sometimes, but not always, the death of someone.", "Grim reaper — coming to an end"],
    ["Temperance", "Moderation in all is ultimate persistence", "Patience — time passes"],
    ["The Devil", "The pain and delight of giving in to temptation", "Archfiend — nemesis"],
    ["The Tower", "A spectacular ambition that ends with disaster", "Destruction — failure"],
    ["The Star", "Time to pause and reflect, contemplate what's precious and what's not", "Distance — the unreachable"],
    ["The Moon", "Longing for the sake of longing,
    and the hope of fulfillment", "Soul — longing"],
    ["The Sun", "Great resources at your disposal, but constrain yourself since it's possible to have too much", "Ability — triumph"],
    ["Judgement", "Ultimate judgment, whether we welcome it or not", "Result — final outcome"],
    ["The World", "Success in anything worldly, but not for free", "Opportunity — success at hand"],
];

function renomearCarta($value)
{
    $value = str_replace(" ", "", $value);
    return $value;
}

function numRomano($value)
{
    switch ($value) {
        case 0:
            return '0';
            break;
        case 1:
            return 'I';
            break;
        case 2:
            return 'II';
            break;
        case 3:
            return 'III';
            break;
        case 4:
            return 'IV';
            break;
        case 5:
            return 'V';
            break;
        case 6:
            return 'VI';
            break;
        case 7:
            return 'VII';
            break;
        case 8:
            return 'VIII';
            break;
        case 9:
            return 'IX';
            break;
        case 10:
            return 'X';
            break;
        case 11:
            return 'XI';
            break;
        case 12:
            return 'XII';
            break;
        case 13:
            return 'XIII';
            break;
        case 14:
            return 'XIV';
            break;
        case 15:
            return 'XV';
            break;
        case 16:
            return 'XVI';
            break;
        case 17:
            return 'XVII';
            break;
        case 18:
            return 'XVIII';
            break;
        case 19:
            return 'XIX';
            break;
        case 20:
            return 'XX';
            break;
        case 21:
            return 'XXI';
            break;
    }
}


$cards_name = [];
foreach ($cards as $card) {
    $cards_name[] = renomearCarta($card[0]);
}

shuffle($cards_name);
?>
<div class="row justify-content-center align-items-center my-3">
    <?php foreach ($cards as $i => $card) : ?>
        <div class="col-md-2">
            <div class="p-1">
                <a href="#<?= renomearCarta($card[0]) ?>" data-bs-toggle="modal" data-bs-target="#<?= renomearCarta($card[0]) ?>">
                    <img src="./assets/tarot/card_back.webp" alt="" class="img-fluid">
                </a>
            </div>
        </div>
    <?php endforeach ?>
</div>

<!-- Modal Cartas -->
<?php foreach ($cards as $i => $card) : ?>
    <div class="modal fade" id="<?= renomearCarta($card[0]) ?>" tabindex="-1" aria-labelledby="<?= renomearCarta($card[0]) ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body bg-dark">

                    <div class="row">
                        <div class="col-6">
                            <img src="./assets/tarot/<?= $i ?>.webp" alt="" class="img-fluid">
                        </div>
                        <div class="col text-start text-light">
                            <div class="row align-items-end h-100">
                                <h2 class="text-warning"><?= numRomano($i) . " - " . $card[0] ?></h2>
                                <hr>
                                <h4 class="text-warning">Meaning</h4>
                                <h5><?= $card[1] ?></h5>
                                <h4 class="text-warning">Archetype</h4>
                                <h5><?= $card[2] ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>