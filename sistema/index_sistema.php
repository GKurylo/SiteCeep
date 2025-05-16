<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php require('app-topo.php') ?>
</head>

<body>

  <!-- Conteúdo principal -->
  <?php require('app-menus.php') ?>

  <h1>Bem-vindo ao Painel</h1>
  <p>Este é o conteúdo principal do sistema administrativo.</p><br>


  <div class="container">
    <h2 class="mb-4 text-center">Calendário - Maio 2025</h2>
    <table class="table table-bordered text-center">
      <thead class="table-light">
        <tr>
          <th>Dom</th>
          <th>Seg</th>
          <th>Ter</th>
          <th>Qua</th>
          <th>Qui</th>
          <th>Sex</th>
          <th>Sáb</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td><td></td><td></td><td></td><td>1</td><td>2</td><td>3</td>
        </tr>
        <tr>
          <td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td>
        </tr>
        <tr>
          <td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td>
        </tr>
        <tr>
          <td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td>
        </tr>
        <tr>
          <td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td>
        </tr>
      </tbody>
    </table>
  </div>

  <?php require('app-scripts.php') ?>

</body>

</html>