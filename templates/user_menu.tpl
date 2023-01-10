

<div class="user_menu">
  <nav>
    <ul class="menuItems">
      <li>
        <a href="?" data-item='РЕЕСТР КП' >РЕЕСТР КП</a>
      </li>
      <li>
        <a href="?transition=1&user_login={$userdata['user_login']}" data-item='Создать КП' >Создать КП</a>
      </li>
      <li>
        <a href="?transition=2&user_login={$userdata['user_login']}" data-item='Создать объектное КП'>Создать объектное КП</a>
      </li>
      <li>
        <a href="?transition=13&user_login={$userdata['user_login']}" target="_blank">Аналитика</a>
      </li>
      <li>
        <a href="?transition=97">Пользователь: {$userdata['user_name']}</a>
      </li>
      {* Ввод нового Юзера *}
      {if $userdata['userType'] == 1}
      <li>
        <a href="?transition=5&user_login={$userdata['user_login']}" data-item='Новый пользователь' >Новый пользователь</a>
      </li>
      <li>
        <a href="parce_kp/index.php" data-item='Поиск по номенклатуре'>Поиск по номенклатуре</a>
      </li>

      {/if}

    </ul>
  </nav>

</div>
