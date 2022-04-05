{extends file="main.tpl"}

{block name=footer}Informacja dodatkowa{/block}

{block name=content}


<h2>Kalkulator Kredytowy</h2>

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>
  <form  action="{$conf->action_root}calcCompute" method="post">
    <fieldset>


      <div class="form-row">
        <div class="col-7">
      <label for="id_kwota">Podaj kwote krydytu</label>
      <input id="id_kwota" type="text"  name="kwota"  placeholder="Kwota" class="form-control" value="{$form->kwota}">

        </div>

        <div class="col-7">

      <label for="id_termin">Podaj termin kredytu(w latach)</label>
      <input id="id_termin" type="text"  name="termin" placeholder="Termin" class="form-control" value="{$form->termin}">
        </div>

        <div class="col-7">

      <label for="id_procent">Podaj oprocentowanie roczne</label>
      <input id="id_procent" type="text"  name="procent"  placeholder="Oprocentowanie" class="form-control"value="{$form->procent}">
        </div>
      </div>

    </fieldset>
    <input type="submit"  class="btn btn-primary mt-2 mb-2 " style=" margin-left: 10px;"  value="Oblicz"  />


  </form>

  <div class="messages">

    {* wyświeltenie listy błędów, jeśli istnieją *}
    {if $msgs->isError()}
    <h4>Wystąpiły błędy: </h4>
    <ol class="err">
      {foreach $msgs->getErrors() as $err}
      {strip}
      <li>{$err}</li>
      {/strip}
      {/foreach}
    </ol>
    {/if}


    {if isset($res->result)}
    <h4>Wynik</h4>
    <p class="res">
      {$res->result}
    </p>
    {/if}

  </div>

  {/block}