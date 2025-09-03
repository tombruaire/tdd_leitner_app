describe('Leitner System Flashcard Application', () => {
  it('Tests', () => {

    /* Ajout d'une flashcard */
    // 1) Affichage de la page
    cy.visit('http://127.0.0.1:8000/')
    cy.wait(1000) // Attente de 1 seconde
    // 2) Définition d'une question
    cy.get("input#flashcard_question").type("Quel est la capitale de la France ?");
    cy.get("input#flashcard_question").blur();
    cy.wait(1000);
    // 3) Définition d'une réponse
    cy.get("input#flashcard_reponse").type("Paris");
    cy.get("input#flashcard_reponse").blur();
    cy.wait(1000);
    // 4) Validation du formulaire
    cy.get("button#flashcard_submit").click();
    
  })
})