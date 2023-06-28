package fr.cours.ihm.java.exercices;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JButton;

public class EcouteurBoutonLangue implements ActionListener{

	
	private FenetrePerso fenetre = null ;        
	String[] Etiquettes_En = {"First","Previous","Next","Last"};    
	String[] Etiquettes_Fr = {"Premier","Precedent","Suivant","Dernier"};
	
	
	
	public EcouteurBoutonLangue(FenetrePerso fen)    
	{        
		this.fenetre = fen ;    
	}
	
	
	
	@Override
	public void actionPerformed(ActionEvent e) {
		// TODO Auto-generated method stub
		JButton source = ((JButton) e.getSource());        
		String[] etiquettes = null;
		
		if (e.getActionCommand().equals("Fr"))        
		{            
			etiquettes = Etiquettes_Fr;            
			source.setText("En");                    
		}
		else            
			if (e.getActionCommand().equals("En"))            
			{                
				etiquettes = Etiquettes_En;                
				source.setText("Fr");            
			}
		
		int i=0;
		for(JButton btn : this.fenetre.getLesBoutons())        
		{            
			btn.setText(etiquettes[i]);            
			i++;        
		}
	}

}
