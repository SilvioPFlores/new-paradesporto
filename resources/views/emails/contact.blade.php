<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <h2>Nova mensagem recebida via site</h2>
    <p><strong>Nome:</strong> {{ $contact->name }}</p>
    <p><strong>E-mail:</strong> {{ $contact->email }}</p>
    <p><strong>Telefone:</strong> {{ $contact->phone ?? 'Não informado' }}</p>
    <p><strong>Possui Deficiência?</strong> {{ $contact->is_pcd ? 'Sim (' . ($contact->disability->pt ?? 'N/A') . ')' : 'Não' }}</p>
    
    @if($contact->accessibility_support)
        <p><strong>Recurso de apoio utilizado:</strong> {{ $contact->accessibility_support }}</p>
    @endif

    @if($contact->subject)
        <p><strong>Assunto:</strong> {{ $contact->subject }}</p>
    @endif

    <p><strong>Mensagem:</strong></p>
    <p>{!! nl2br(e($contact->message)) !!}</p>
</body>
</html>