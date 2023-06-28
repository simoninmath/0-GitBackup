package fr.cours.ihm.java.exercices;

import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.*;

class Fen2Boutons extends JFrame implements ActionListener {
	
	private JButton btnEN ;
	private JButton monBouton1 ;
	private JButton monBouton2 ;
	private JButton monBouton3 ; 
	private JButton monBouton4 ;
	
	public Fen2Boutons() {
		super();
		this.setTitle("Exercices Java Buttons") ;
		this.setSize(800, 600) ;
		Container contenu = this.getContentPane() ;
		
		btnEN = new JButton("English") ;
		monBouton1 = new JButton("Premier") ;
		monBouton2 = new JButton("Precedent") ;
		monBouton3 = new JButton("Suivant") ;
		monBouton4 = new JButton("Dernier") ;
		
		contenu.setLayout(new FlowLayout()) ;
		contenu.add(btnEN) ;
		contenu.add(monBouton1) ;
		contenu.add(monBouton2) ;
		contenu.add(monBouton3) ;
		contenu.add(monBouton4) ;
		
		btnEN.addActionListener(this) ;
		monBouton1.addActionListener(this) ;
		monBouton2.addActionListener(this) ;
		monBouton3.addActionListener(this) ;
		monBouton4.addActionListener(this) ;
		
		btnEN.setActionCommand("btnEN") ;
		monBouton1.setActionCommand("monBouton1") ;
		monBouton2.setActionCommand("monBouton2") ;
		monBouton3.setActionCommand("monBouton3") ;
		monBouton4.setActionCommand("monBouton4") ;
		
		this.setDefaultCloseOperation(EXIT_ON_CLOSE) ;
	}
		
	public static void main(String[] args) {
		Fen2Boutons fenetre = new Fen2Boutons() ;
		fenetre.setVisible(true) ;
	}

	@Override
	public void actionPerformed(ActionEvent e) {
		String commande = e.getActionCommand() ;
		System.out.println("Action sur bouton : " + commande) ;
		
		if (commande.equals("btnEN")) {
			monBouton1.setText("First") ;
			monBouton2.setText("Previous") ;
			monBouton3.setText("Next") ;
			monBouton4.setText("Last") ;
		}
	}
}
