<h3>Essa é a visão Projetos</h3>

@foreach ($contatos as $contatos)
<p>Tema: {{ $contatos['tema'] }} </p>
<p>Título: {{ $contatos['titulo'] }} </p>
@endforeach