$negara = array(
  'Indonesia' => 'Jakarta',
  'Malaysia'  => 'Kuala Lumpur',
  'Singapura' => 'Singapura',
  'Thailand'  => 'Bangkok',
  'Filipina'  => 'Manila'
);
?>
<ul>
  <?php foreach ($negara as $key => $value): ?>
      <li>Ibukota <?= $key ?> adalah <?= $value ?></li>
  <?php endforeach ?>
</ul>