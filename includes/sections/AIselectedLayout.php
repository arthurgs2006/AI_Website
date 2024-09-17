<div class="d-flex justify-content-center" style='gap: 5vh;'>
    <?php include '../../includes/components/card.php';
    renderCard(false,false, 'ChatGPT', '<p><strong>Descrição:</strong> O ChatGPT é uma IA avançada baseada na arquitetura GPT-4, projetada para conversação natural e diversos tipos de assistência, incluindo aprendizado, codificação e análise de dados.</p>');
    renderCard(false, false,'Pontos Fortes:', '<ul>
                            <li>Capacidade de conversação natural e contextualizada.</li>
                            <li>Vasta gama de conhecimentos até 2023.</li>
                            <li>Suporte a múltiplas línguas.</li>
                            <li>Aplicável em diversos setores, como tecnologia, educação, e saúde.</li>
                        </ul>');

    renderCard(
        false,
        false,
        'Pontos Fracos:',
        '<ul>
            <li>Informações limitadas até 2023.</li>
            <li>Pode gerar respostas imprecisas em temas muito recentes.</li>
            <li>Necessidade de refinamento em questões complexas e especializadas.</li>
        </ul>',
    );

    ?>
</div>
<div class="d-flex justify-content-center m-5">
    <a class="btn btn-info" target="_blank" href="https://openai.com/chatgpt/">
        Access to ChatGPT
    </a>
</div>