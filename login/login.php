
<section class="template-wrapper row-flex justify-center align-items-center">
  <form class="c-appLogin">
    <header class="c-appLogin-header"></header>
    <section class="c-appLogin-body">
      <article class="c-appLogin-block">
        <article class="c-appLogin-row">
          <input class="c-appLogin-input" type="text" name="username" placeholder="username" ng-model="username"/>
        </article>
        <article class="c-appLogin-row">
          <input class="c-appLogin-input" type="password" name="password" placeholder="password" ng-model="password"/>
        </article>
      </article>
      <article class="c-appLogin-block">
        <button class="c-appLogin-button" type="submit" id="login-button" ng-click="nivelUsuario()">Login</button>
      </article>
    </section>
    <footer class="c-appLogin-footer"></footer>
  </form>
</section>