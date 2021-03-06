<?php

namespace NFePHP\Mail;

class Base
{
    /**
     * Html Templates
     * @var array
     */
    protected $templates = [
        'NFe'=> "<p><b>Prezados {contato},</b></p>".
                "<p>Você está recebendo a Nota Fiscal Eletrônica emitida em {data} com o número ".
                "{numero}, de {emitente}, no valor de R$ {valor}. ".
                "Junto com a mercadoria, você receberá também um DANFE (Documento ".
                "Auxiliar da Nota Fiscal Eletrônica), que acompanha o trânsito das mercadorias.</p>".
                "<p><i>Podemos conceituar a Nota Fiscal Eletrônica como um documento ".
                "de existência apenas digital, emitido e armazenado eletronicamente, ".
                "com o intuito de documentar, para fins fiscais, uma operação de ".
                "circulação de mercadorias, ocorrida entre as partes. Sua validade ".
                "jurídica garantida pela assinatura digital do remetente (garantia ".
                "de autoria e de integridade) e recepção, pelo Fisco, do documento ".
                "eletrônico, antes da ocorrência do Fato Gerador.</i></p>".
                "<p><i>Os registros fiscais e contábeis devem ser feitos, a partir ".
                "do próprio arquivo da NF-e, anexo neste e-mail, ou utilizando o ".
                "DANFE, que representa graficamente a Nota Fiscal Eletrônica. ".
                "A validade e autenticidade deste documento eletrônico pode ser ".
                "verificada no site nacional do projeto (www.nfe.fazenda.gov.br), ".
                "através da chave de acesso contida no DANFE.</i></p>".
                "<p><i>Para poder utilizar os dados descritos do DANFE na ".
                "escrituração da NF-e, tanto o contribuinte destinatário, ".
                "como o contribuinte emitente, terão de verificar a validade da NF-e. ".
                "Esta validade está vinculada à efetiva existência da NF-e nos ".
                "arquivos da SEFAZ, e comprovada através da emissão da Autorização de Uso.</i></p>".
                "<p><b>O DANFE não é uma nota fiscal, nem substitui uma nota fiscal, ".
                "servindo apenas como instrumento auxiliar para consulta da NF-e no ".
                "Ambiente Nacional.</b></p>".
                "<p>Para mais detalhes, consulte: <a href=\"http://www.nfe.fazenda.gov.br/\">".
                "www.nfe.fazenda.gov.br</a></p>".
                "<br>".
                "<p>Atenciosamente,</p>".
                "<p>{emitente}</p>",
        
        'CTe'=> "<p><b>Prezados {contato},</b></p>".
                "<p>Você está recebendo um Conhecimento de Transporte Eletrônico emitido em {data} com o número ".
                "{numero}, de {emitente}, no valor de R$ {valor}. ".
                "Junto com a mercadoria, você receberá também um DACTE (Documento ".
                "Auxiliar do Conhecimento de Transporte Eletrônico), que acompanha o trânsito das mercadorias.</p>".
                "<p><i>Podemos conceituar o CTe como um documento ".
                "de existência apenas digital, emitido e armazenado eletronicamente, ".
                "com o intuito de documentar, para fins fiscais, uma operação de ".
                "circulação de mercadorias, ocorrida entre as partes. Sua validade ".
                "jurídica garantida pela assinatura digital do remetente (garantia ".
                "de autoria e de integridade) e recepção, pelo Fisco, do documento ".
                "eletrônico, antes da ocorrência do Fato Gerador.</i></p>".
                "<p><i>Os registros fiscais e contábeis devem ser feitos, a partir ".
                "do próprio arquivo da NF-e, anexo neste e-mail, ou utilizando o ".
                "DACTE, que representa graficamente o Conhecimento de Transporte Eletrônico. ".
                "A validade e autenticidade deste documento eletrônico pode ser ".
                "verificada no site nacional do projeto (www.cte.fazenda.gov.br), ".
                "através da chave de acesso contida no DACTE.</i></p>".
                "<p><i>Para poder utilizar os dados descritos do DACTE na ".
                "escrituração do CT-e, tanto o contribuinte destinatário, ".
                "como o contribuinte emitente, terão de verificar a validade do CT-e. ".
                "Esta validade está vinculada à efetiva existência do CT-e nos ".
                "arquivos da SEFAZ, e comprovada através da emissão da Autorização de Uso.</i></p>".
                "<p><b>O DACTE não é um Conhecimento de transporte, nem o substitui, ".
                "servindo apenas como instrumento auxiliar para consulta do CT-e no ".
                "Ambiente Nacional.</b></p>".
                "<p>Para mais detalhes, consulte: <a href=\"http://www.cte.fazenda.gov.br/\">".
                "www.cte.fazenda.gov.br</a></p>".
                "<br>".
                "<p>Atenciosamente,</p>".
                "<p>{emitente}</p>",
                
        'CCe'=> "<p><b>Prezados,</b></p>".
                "<p>Você está recebendo uma Carta de Correção referente ao nosso documento" .
                "{chave}, essa carta de correção datada de {data} procura corrigir:</p> ".
                "<br>" .
                "<p><b>{correcao}</b></p>".
                "<br>" .
                "<p><i>{conduso}</i></p>" .
                "<br>".
                "<p>Atenciosamente</p>"
    ];
}
