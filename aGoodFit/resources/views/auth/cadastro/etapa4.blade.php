<div class="section section-cadastro">
  <div class="cadastro-intro">
    <h3 class="intro-title">Endereço</h3>
    <p class="intro-desc">Para finalizar, precisamos de informações localização</p>
  </div>

  <div class="cadastro-etapa2-content">
    <form method="post">
      @csrf

      <div class="content-perfil-desc">
        <div class="content-perfil-desc-item">
          CEP
          <input class="form-input-item form-input-item-perfil @error('cep') is-invalid @enderror" id="cep" type="text" name="cep" value="{{ old('cep') }}" required autocomplete="cep" autofocus>
          @error('cep')
          <span class="erro" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="content-perfil-desc-item">
          Logradouro
          <input class="form-input-item form-input-item-perfil @error('logradouro') is-invalid @enderror" id="logradouro" type="logradouro" name="logradouro" value="{{ old('logradouro') }}" required autocomplete="logradouro" autofocus>
          @error('logradouro')
          <span class="erro" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="content-perfil-desc-item">
          Bairro
          <input class="form-input-item form-input-item-perfil @error('bairro') is-invalid @enderror" type="bairro" id="bairro" name="bairro" value="{{ old('bairro') }}" autocomplete="bairro" autofocus>
          @error('bairro')
          <span class="erro" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="content-perfil-desc-item">
          Cidade
          <input class="form-input-item form-input-item-perfil @error('cidade') is-invalid @enderror" type="cidade" id="cidade" name="cidade" value="{{ old('cidade') }}" autocomplete="cidade" autofocus>
          @error('cidade')
          <span class="erro" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="content-perfil-desc-box">
          <div class="content-perfil-desc-item content-perfil-desc-box-item">
            Estado
            <input class="form-input-item form-input-item-perfil @error('estado') is-invalid @enderror" id="estado" type="estado" name="estado" value="{{ old('estado') }}" required autocomplete="estado" autofocus>
            @error('estado')
            <span class="erro" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="content-perfil-desc-item content-perfil-desc-box-item">
            Zona
            <input class="form-input-item form-input-item-perfil @error('zona') is-invalid @enderror" type="zona" id="zona" name="zona" value="{{ old('zona') }}" autocomplete="zona" autofocus>
            @error('zona')
            <span class="erro" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="content-perfil-desc-box">
          <div class="content-perfil-desc-item content-perfil-desc-box-item">
            Número
            <input class="form-input-item form-input-item-perfil @error('numero') is-invalid @enderror" id="numero" type="numero" name="numero" value="{{ old('numero') }}" required autocomplete="numero" autofocus>
            @error('numero')
            <span class="erro" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="content-perfil-desc-item content-perfil-desc-box-item">
            Complemento
            <input class="form-input-item form-input-item-perfil @error('complemento') is-invalid @enderror" type="complemento" id="complemento" name="complemento" value="{{ old('complemento') }}" autocomplete="complemento" autofocus>
            @error('complemento')
            <span class="erro" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
      </div>

    </form>
  </div>
</div>