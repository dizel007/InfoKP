

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
        {if count($arr_overdue_now) >0}
        <a class="overdue_kp_now" href="?transition=41&overdue_type=1">{count($arr_overdue_now)}</a>
        {else}
        <a class="overdue_kp_now" href="#">{count($arr_overdue_now)}</a>
        {/if}
        {if count($arr_overdue_all) >0}
        <a class="overdue_kp_all" href="?transition=41&overdue_type=2">{count($arr_overdue_all)}</a>
          {else}
        <a class="overdue_kp_all" href="#">{count($arr_overdue_all)}</a>
           {/if}

        
  
      {* Ввод нового Юзера *}
      {if $userdata['userType'] == 1}
      <li>
        <a href="?transition=5&user_login={$userdata['user_login']}" data-item='Новый пользователь' >Новый пользователь</a>
      </li>
      <li>
        <a href="parce_kp/nomenclatura.php" data-item='Поиск по номенклатуре'>Поиск по номенклатуре</a>
      </li>
      
       <li>
        <a href="?transition=70&user_login={$userdata['user_login']}" target="_blank">НьюАн</a>
      </li>


      {/if}

    </ul>
  </nav>

</div>
