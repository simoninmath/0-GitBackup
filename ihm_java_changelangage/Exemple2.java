package fr.cours.ihm.java.exercices;

import java.awt.Container;
import java.awt.FlowLayout;
import java.awt.HeadlessException;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.JButton;
import javax.swing.JFrame;



class FenetrePerso extends JFrame implements ActionListener {
	
	private static final long serialVersionUID = 1L;

	private String[] Chaines_commandes = { "Prem", "Prec", "Suiv", "Der" };
	private JButton cmdLangue;
	private JButton[] lesBoutons;
	private JButton cmdActiveDesactive;

	public JButton[] getLesBoutons() {
		return lesBoutons;
	}

	private void Genere_Suite_Boutons(String[] etiquettes, String[] ch_commandes, ActionListener ecouteur) {
		this.lesBoutons = new JButton[etiquettes.length];
		for (int i = 0; i < etiquettes.length; i++) {
			JButton courant = new JButton(etiquettes[i]);
			courant.setActionCommand(ch_commandes[i]);
			courant.addActionListener(ecouteur);
			lesBoutons[i] = courant;
		}
	}

	public FenetrePerso(String[] Etiquettes) throws HeadlessException {
		super();
		this.setTitle("GESTION MULTI LANGUE");
		this.setSize(800, 600);
		Container contenu = this.getContentPane();
		contenu.setLayout(new FlowLayout());

		Genere_Suite_Boutons(Etiquettes, Chaines_commandes, this);

		for (JButton btn : lesBoutons) {
			contenu.add(btn);
		}

		cmdLangue = new JButton("Fr");
		cmdLangue.addActionListener(new EcouteurBoutonLangue(this));
		contenu.add(cmdLangue);

		cmdActiveDesactive = new JButton("Désactive");
		contenu.add(cmdActiveDesactive);
		cmdActiveDesactive.addActionListener(this);
	}

	@Override
	public void actionPerformed(ActionEvent e) {
		// TODO Auto-generated method stub
		String etiquette = e.getActionCommand();
		System.out.println("Action sur bouton " + etiquette);

		JButton source = ((JButton) e.getSource());

		if (source == cmdActiveDesactive) {
			if (source.getText().equals("Désactive")) {
				cmdLangue.setEnabled(false);
				source.setText("Active");
			} else if (source.getText().equals("Active")) {
				cmdLangue.setEnabled(true);
				source.setText("Désactive");
			}
		}
	}

}

public class Exemple2 {

	public static void main(String[] args) {

		String[] Etiquettes_En = { "First", "Previous", "Next", "Last" };
		String[] Etiquettes_Fr = { "Premier", "Precedent", "Suivant", "Dernier" };
		FenetrePerso fenetre = new FenetrePerso(Etiquettes_En);
		fenetre.setVisible(true);

	}

}
