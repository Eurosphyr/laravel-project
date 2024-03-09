<h3>Essa é a visão Contato</h3>

@foreach ($contatos as $contato)
<p>Tema: {{ $contato['tema'] }} </p>
<p>Título: {{ $contato['titulo'] }} </p>
@endforeach