---
layout: research
title: C-Hunter
slug: c-hunter
category: c-hunter
date: 2007-05-01
permalink: /research/c-hunter/
description: Identifying clusters of functionally related genes in genomes
author: Gangman Yi
---

### Identifying clusters of functionally related genes in genomes

C-Hunter is a new clustering algorithm which incorporates knowledge of gene function derived from Gene Ontology, with the organization of genes on chromosomes. In order to use C-Hunter program, basic data sets are needed. All data sets for eight species(AT,CE,DM,DR,EC,HS,MM & SC), Data/Map file, GO, gene2accession and gene2go are supplied with C-Hunter program together. But, if you want to use new data sets, you can download from each website and you can make them again. C-Hunter program can be compiled under the Unix/Linux/Windows(Cygwin) environment, if the compiler supports STL.

### Installation

- tar -zxvf C_Hunter_v.1.2.tar.gz
- cd C_Hunter_v.1.2
- ./install

### Procedure for preparing data sets

If you are going to use alreay-made data sets, you don't need to do this procedure.

1. Download go.obo text file (include Molecular Function, Biological Process, Cellular) at http://www.geneontology.org/page/download-ontology
2. Download gene2accession at NCBI, ftp://ftp.ncbi.nlm.nih.gov/gene/DATA/
3. Download gene2go at NCBI, ftp://ftp.ncbi.nlm.nih.gov/gene/DATA/
4. Make Chromosome list file (text file by tab-separated format)

   - 1st_Column = Chromsome Number
   - 2nd_Column = Accession
   - 3rd_Column = GI

5. Run "obo2scheme.py" with 1 Gene Ontology data

   - Usage : python obo2scheme.py go.obo (file from #1)
   - The output file name will be "scheme.GO.data"

6. Run "Make_GO_Map_Data.php" with gene2accession, gene2go and Chr_list
   - Usage : php Make_GO_Map_Data.php gene2accession, gene2go, Chr_list, Ouput file name
   - This converting program makes map files and GO data files.

### Download

- [C_Hunter_v.1.2.tar.gz](https://bigdata.dongguk.edu/~gangman/files/projects/C_Hunter_v.1.2.tar.gz)
- [C_Hunter_v.1.2.Fasta.tar.gz](https://bigdata.dongguk.edu/~gangman/files/projects/C_Hunter_v.1.2.Fasta.tar.gz)
