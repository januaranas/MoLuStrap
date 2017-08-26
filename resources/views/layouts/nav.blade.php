<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MoLuStrap</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./">Home</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="{{ url('read-all') }}" target="_blank" data-placement="top" data-toggle="tooltip" title="JSON View on new Tab">View All Data</a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>